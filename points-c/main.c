#include <stdio.h>
#include "./points.h"

int main() {

    struct point p1;
    struct point p2;

    p1.x = 3;
    p1.y = 4;
    p2.x = 7;
    p2.y = 9;

    printf("Distance is: %f\n\n", distance(p1, p2));

    return 0;
}
