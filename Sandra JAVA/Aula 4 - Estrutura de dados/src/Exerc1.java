import java.util.Scanner;

public class Exerc1 {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.println("qual foi a sua nota? ");
        int nota = sc.nextInt();

        if (nota < 5) {
            System.out.println("você foi reprovado: sua nota foi" + nota);
        } else if ( nota < 7) {
            System.out.println("você ficou de recuperação.");
        }else{
            System.out.println("você foi aprovado. sua nota foi" + nota);
        }
    }
}
