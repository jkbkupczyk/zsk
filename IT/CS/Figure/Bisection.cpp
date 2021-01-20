#include <iostream>

double f(double x) {
	return x * x * x - x - 2;
}

double bisection(double a = 0, double b = 2, double epsilon = 0.0001) {
	double x;

	while(b-a > epsilon) {
		x = (a + b) / 2;

		if ( f(x) == 0){
			return x;
		}
		else if (f(x) * f(a) < 0) {
			b = x;
		}
		else {
			a = x;
		}
	}

	return x;
}

int main() {

	std::cout << "Value: " << bisection() << std::endl;

}