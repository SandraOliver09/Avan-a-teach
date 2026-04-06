package Revisao;
import java.util.Scanner;


public class REv4IfElse {
    public static void main(String[] args){
        Scanner scanner =new Scanner(System.in);
        System.out.println("Escreva a temperatura atual ");

        double temperatura = scanner.nextDouble();
        scanner.nextLine();

        if (temperatura>35){

            System.out.println("Dia muito quente");
        }else{
            System.out.println("Clima agradavel");
        }

        // Exercicio 2

        System.out.println("Digite o valor da energia atual");
        int valor_energia= scanner.nextInt();
        System.out.println("Energia suficiente");
        scanner.nextLine();

        if (valor_energia>20){

        }else{
            System.out.println("Energia Baixa");
        }

        //Exercicio 3

        // solicitar senha do usuario
        System.out.println("Digite sua senha");
        String senha= scanner.nextLine();

        // verificar senha
        if (senha.equals("ADMIN1234")){
            System.out.print("Acesso Permitido");
        } else {
            System.out.print("Senha incorreta");
        }

        //exercio 4
        //solicitar o valor do produto
        System.out.println("digite o valor do produto em Dólar(equivalente em R$");
        double valorproduto = scanner.nextDouble();

        //verificar a condicão

        if (valorproduto==500){
            System.out.println("Produto será taxado");
        }else{
            System.out.print("Produto isento de taxa");

        }
        //exercicio 5
        //solicitar a vida do personagem
        System.out.print("Vida do personagem é?");
        int vidaPersonagem = scanner.nextInt();

        //verificar condição
        if (vidaPersonagem<=0){
            System.out.println("Gamer Over");
        }else{
            System.out.println("Personagem Vivo");
        }

        scanner.close();

    }
}
