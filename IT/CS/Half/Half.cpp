#include<iostream>

double f(double x) {
	return x * x * x + 5 * x - 3;
}

double half(double p, double q, double epsilon) {
	double mid = (p + q) / 2, ratio;

	while (f(p) !=0 && f(q) != 0 && q-p >= epsilon) {

		mid = (p + q) / 2;

		ratio = f(p) * f(mid);
		if (ratio > 0)
			p = mid;
		else
			q = mid;
	}

	if (f(p) == 0)
		return p;
	if (f(q) == 0)
		return q;

	return mid;
}


int main() {
	double p = -2, q = 2, epsilon = 10, epsilon2 = 100;

	std::cout << "Half, epsilon = " << epsilon << " : " << half(p, q, epsilon) << std::endl;

	std::cout << "Half, epsilon2 = " << epsilon2 << " : " << half(p, q, epsilon2) << std::endl;


	return 666;
}