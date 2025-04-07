#include <stdio.h>
#include <math.h>

int main() {
    double a, b, c;
    scanf("%lf %lf %lf", &a, &b, &c);

    double d = b * b - 4 * a * c;

    if (d > 0) {
        printf("REAL AND DISTINCT\n");
        double r1 = (-b + sqrt(d)) / (2 * a);
        double r2 = (-b - sqrt(d)) / (2 * a);
        printf("%.2f %.2f\n",r1,r2);
    } else if (d == 0) {
        printf("REAL AND EQUAL\n");
        double r = -b / (2 * a);
        printf("%.2f %.2f\n",r,r);
    } else {
        printf("IMAGINARY ROOTS\n");
        double real = -b / (2 * a);
        double imag = sqrt(-d) / (2 * a);
        printf("%.2f+%.2fi %.2f-%.2fi\n", real,imag, real,imag);
    }

    return 0;
}
