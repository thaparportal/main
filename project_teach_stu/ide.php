<?php

$user = 'niteshsinghns'; //--> API username
$pass = 'n1202481117'; //--> API password

$lang = 1; //--> Source Language Code; Here is 1 => C++
$code='#include using namespace std; int main() { cout<<"Hello"; return 0; }';

if(isset($_POST['file']))
{
$code =$_POST['file']; //--> Source Code
	echo "
<form method='post' action='#'>
<textarea rows=20 cols=100 name='code' rows='5' cols='40'>$code</textarea>
 <input type='submit' name='submit' value='Submit'> 
</form>
";
$input = '';
	if(isset($_POST['input']))
		$input=$_POST['input'];
$run = true;
$private = true;

//create new SoapClient
$client = new SoapClient( "http://ideone.com/api/1/service.wsdl" );

//create new submission
$result = $client->createSubmission( $user, $pass, $code, $lang, $input, $run, $private );

//if submission is OK, get the status
if ( $result['error'] == 'OK' ) {

    $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );

    if ( $status['error'] == 'OK' ) {

        //check if the status is 0, otherwise getSubmissionStatus again
        while ( $status['status'] != 0 ) {
            sleep( 3 ); //sleep 3 seconds
            $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
        }

        //finally get the submission results
        $details = $client->getSubmissionDetails( $user, $pass, $result['link'], true, true, true, true, true );
        if ( $details['error'] == 'OK' ) {
           //var_dump( $details );
			echo 'Language:'.$details['langName'].'<br>';
			echo 'Source:  '.htmlentities($details['source']).'<br>';
			echo 'Input:  '.$details['input'].'<br>';
			echo 'Output:  '.$details['output'].'<br>';
			if(isset($details['error']))
			echo 'Error'.$details['error'].'<br>';
			
        } else {
            //we got some error
            var_dump( $details );
        }
    } else {
        //we got some error
        var_dump( $status );
    }
} else {
    //we got some error
    var_dump( $result );
}
}