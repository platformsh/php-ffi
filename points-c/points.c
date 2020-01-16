#include "points.h"
#include <math.h>

double distance(struct point first, struct point second) {
    double a_squared = pow((second.x - first.x), 2);
    double b_squared = pow((second.y - first.y), 2);

    return sqrt(a_squared + b_squared);
}
