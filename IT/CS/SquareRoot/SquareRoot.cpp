#include <iostream>
#include <cmath>

void foo(double a, double epsilon) {
	double p = 0, q = a, mid;

	while (abs(p - q) > epsilon) {
		mid = (p + q) / 2;

		if (pow(mid, 2) > a) {
			q = mid;
		}
		else if (pow(mid, 2) < a) {
			p = mid;
		}
		else {
			p = q;
			q = mid;
		}
	}

	std::cout << "Range: <" << p << ", " << q << ">";
}

int main() {

	double a, eps;


	std::cout << "Liczba: ";
	std::cin >> a;

	std::cout << "Epsilon: ";
	std::cin >> eps;

	foo(a, eps);

	std::cout << std::endl;

	return 0;
}