#include <bits/stdc++.h>
using namespace std;
 
typedef vector<int> vi;
#define boost ios_base::sync_with_stdio(false);
#define rep(i,n) for(int i=0; i<n; i++)
#define tr(it,x) for(auto it=x.begin(); it!=x.end(); it++)
#define all(x) x.begin(),x.end()
 
int main()
{
    boost;
    int n,l=0;
    cin >> n;
    map<string,int> hash;
    string a;
    rep(i,n){
    	cin >> a;
    	sort(all(a));
    	hash[a]++;
    }
    tr(it,hash) l = max(l,it->second);
    cout << l << endl;
}