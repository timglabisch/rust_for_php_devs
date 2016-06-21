#include<stdio.h>
#include<stdlib.h>

int main() {

    char *str = (char *) malloc(sizeof(char) * 3);
    str[0] = 'a';
    str[1] = 'b';
    str[2] = '\0';

    printf("%s",str);
	
    free(str);
    free(str);
    return 0;
}
