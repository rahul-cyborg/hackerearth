#include <iostream>
#include<climits>
using namespace std;
 
int main()
{
   int t,n,i,j,flag,min,m=INT_MAX;
   cin>>t;
   while(t--){
   	   cin>>n;
   	   min=INT_MAX;
   	   for(i=0;i<=n/6;i++){
   	   	   flag=0;
   	   	   for(j=0;j<=n/8;j++){
   	   	   	   if(6*i+8*j==n){
   	   	   	   	  if(i+j<min)
   	   	   	   	     min=i+j;
   	   	   	   	  flag=1;
   	   	   	   	  break;
   	   	   	   }
   	   	   }
   	   	   if(flag)
   	   	      break;
   	   }
   	   if(m==min)
   	      cout<<"-1"<<endl;
   	   else
   	      cout<<min<<endl;
   }
   
}
