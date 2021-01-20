#include <iostream>
#include <math.h>

double f(double x) {
	return - ((x * x) / 50);
}

double g(double x) {
	return 1 + x * x / 100 - x / 200;
}

double Area(double a = 0, double b = 10, double epsilon = 0.0001, int n = 10) {
	double h = (b - a) / epsilon, area = 0;

	for (double i = 0.; i < n ; i += 0.0001)
	{
		area += epsilon * fabs(f(i)) + epsilon * fabs(g(i));
	}

	return area;
}

int main() {

	std::cout << "Area under graph: " << Area() << std::endl;

	return 1;
}