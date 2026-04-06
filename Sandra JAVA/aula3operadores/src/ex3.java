import java.util.Scanner;
public class ex3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println(" usuario um:");
        int num1 = sc.nextInt();

        System.out.println("Usuario Dois");
        int num2 = sc.nextInt();

        if (num1 > num2) {
            System.out.println("numero1 é maior");
        }

        if (num1 < num2) {
            System.out.println(" o num 1 é menor");
        }

        if (num1 != num2) {
            System.out.println("o num1 é difrente");
        }
        if (num1 == num2) {
            System.out.println("o num é igual");

        }
    }

    }





