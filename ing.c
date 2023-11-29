#include<stdio.h>
int main()
{
    /* code */
    int i;
    
    
        printf("Enter you money:");
        scanf("%d" ,&i);
        if(i==100 && i>=90)
        {
            printf("grate A");
        }
        else if(i>=80 && i>=70)
        {
            printf("grate B");
        }
        else{
            printf("you fall");
        }

    return 0;
}
