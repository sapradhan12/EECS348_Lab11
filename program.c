#include <stdio.h>

int main(void) {
    printf("Hello, World!\n");

    char name[50];
    printf("Enter your name: ");
    scanf("%49s", name);
    printf("Hello, %s!\n", name);

    int age;
    printf("Enter your age: ");
    scanf("%d", &age);
    printf("Next year, you will be %d years old.\n", age + 1);

    if (age % 2 == 0) {
        printf("Your age is even.\n");
    } else {
        printf("Your age is odd.\n");
    }

    printf("Counting from 1 to 5: ");
    for (int i = 1; i <= 5; i++) {
        printf("%d ", i);
    }
    printf("\n");

    return 0;
}