#include <stdio.h>
int main() {
	int a;
	scanf("%d",&a);
	a=a%2;
	if (a==0) printf("1\n");
	else printf("0\n");
	return 0;
}