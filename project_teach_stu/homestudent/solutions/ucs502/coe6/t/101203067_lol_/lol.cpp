#include <iostream.h>
int fact(int n)
{
	if(n==0)
	return 1;
	else 
	return n*fact(n-1);
	}
int main()
{
    int *a,t,i;
    cin>>t;
    for(i=0;i<t;i++)
    cin>>a[i];
       
    for(i=0;i<t;i++)
    cout<<fact(a[i])<<"\n";
    return 0;
    
}
