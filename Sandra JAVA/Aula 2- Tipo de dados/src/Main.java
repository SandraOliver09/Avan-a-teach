import java.util.Scanner;

public class Main{
    public static void main (String[] args){
       Scanner sc = new Scanner (System.in);
    // Tipo de Dados - TEXTO
       System.out.println("Digite sua senha: ");
       String nome = sc. nextLine();

    // Tipo de Dados - Numerico
        System.out.println(" Qual foi ano que você nasceu: ");
        int anoNascimento = sc.nextInt();

        System.out.println("A senha  Digitada foi: " + nome);
        System.out.println("O ano foi:" + anoNascimento);

    }
}