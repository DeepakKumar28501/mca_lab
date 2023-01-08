#include<stdio.h>

// int main(){
// 	int *a=5,b;
// 	printf("%u\n",&a);
// 		printf("%u\n",&a+1);
// 		printf("%u\n",b=&a+2);
// 		printf("%u\n",&b);
// }
 
// int main(){
// 	int a;
// 	float b;
// 	char c;
// 	double d;
// 	a=10;
// 	b=23.4;
// 	c='A';
// 	d=12345.66;
// 	printf("%d is stored in location %u \n",a,&a);
// 		printf("%f is stored in location %u \n",b,&b);
// 			printf("%c is stored in location %u \n",c,&c);
// 				printf("%ld is stored in location %u \n",d,&d);
// 				 }
 
// int main(){
// 	int *p;
// 	int k=45;
// 	printf("k=%d and address of k=%u\n",k,&k);
// 	p=&k;
// 		printf("Address of p=%u and address of k=%u\n",*p,k);
// 		printf("Value of p=%u and k=%u\n",*p,k);
// }
 
//  int main(){
// 	int *p;
// 	int k='A';
// 	printf("k=%d and address of k=%u\n",k,&k);
// 	p=&k;
// 		printf("Address of p=%u and address of k=%u\n",*p,k);
// 		printf("Value of p=%u and k=%u\n",*p,k);
// }


//int main(){
//	int *p,**ptr,***ptr1;
//	int k=45;
//	p=&k;
//	ptr=&p;
//	ptr1=&ptr;
//	printf("%u\n",ptr1);
//	printf("%u\n",ptr);
//	printf("%u\n",*ptr1);
//	printf("%u\n",**ptr1);
//	printf("%u\n",***ptr1);
//	
//	
//}


//int main(){
//	int a,b;
//	int c=45;
//	int *p;
//	a=4*(c+5);
//	p=&c;
//	b=4*(*p+5);
//	printf("a=%d b=%d\n",a,b);
//}

int main(){
	int x,y;
	int *ptr;
	x=10;
	ptr=&x;
	y=*ptr;
	printf("%d is the stored in location %u \n",x,&x);
	printf("%d is the stored in location %u \n",*&x,&x);
	printf("%d is the stored in location %u \n",*ptr,ptr);
	printf("%d is the stored in location %u \n",y,&*ptr);
	printf("%d is the stored in location %u \n",ptr,&ptr);
	printf("%d is the stored in location %u \n",y,&y);
	*ptr=25;
	printf("\nNow x=%d \n",x);                                                                                                                                                                           
	\
	
	
	
//int main(){
//	int *p,**ptr,***ptr1;
//	int k=45;
//	p=&k;
//	ptr=&p;
//	ptr1=&ptr;
//	printf("%u\n",ptr1);
//	printf("%u\n",ptr);
//	printf("%u\n",*ptr1);
//	printf("%u\n",**ptr1);
//	printf("%u\n",***ptr1);
//	
//	
//}


//int main(){
//	int a,b;
//	int c=45;
//	int *p;
//	a=4*(c+5);
//	p=&c;
//	b=4*(*p+5);
//	printf("a=%d b=%d\n",a,b);
//}

//int main(){
//	int x,y;
//	int *ptr;
//	x=10;
//	ptr=&x;
//	y=*ptr;
//	printf("%d is the stored in location %u \n",x,&x);
//	printf("%d is the stored in location %u \n",*&x,&x);
//	printf("%d is the stored in location %u \n",*ptr,ptr);
//	printf("%d is the stored in location %u \n",y,&*ptr);
//	printf("%d is the stored in location %u \n",ptr,&ptr);
//	printf("%d is the stored in location %u \n",y,&y);
//	*ptr=25;
//	printf("\nNow x=%d \n",x);                                                                                                                                                                                                                                                                                                                                                                                                    0
//}


//int main(){
//	int *a,*b;
//	int x=5,y=7,c;
//	a=&x;
//	b=&y;
//	
//	c=*a+*b;
//	printf("%d",c);
//
//}

//int main(){
//	int x=4,y=6,z=45,result;
//	int *p,*q,*r;
//	p=&x;
//	q=&y;
//	r=&z;
//	result=*p+*q+*r;
//	
//	printf("%d",result);
//
//}

int main(){
	int ***p=5;
	
	printf("%d",**p);

}0
}