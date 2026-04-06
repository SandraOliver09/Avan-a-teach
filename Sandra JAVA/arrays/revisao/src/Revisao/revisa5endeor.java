package Revisao;

import java.util.Scanner;

public class revisa5endeor {
    public static void main(String[] args){
        Scanner scanner= new Scanner(System.in);

        // 1. solicitacao do usuario
        System.out.println("Digite sua idade");
        int idade=scanner.nextInt();

        System.out.print("possui ingresso?(true/false");
        boolean possuiIngresso= scanner.nextBoolean();

        if(idade>18 && possuiIngresso){
            System.out.println("Entrada Liberada");
        }else{
            System.out.println("Entrada não permitida");
        }

        // 2. solicitacao do usuario

        System.out.println("Digite o valor da compra");
        double valorCompra = scanner.nextDouble();

        System.out.println("Cliente é vip?(true/false");
        boolean clienteVip = scanner.nextBoolean();

        //verificando condicoes e exibir resultado
        if (valorCompra>= 50 || clienteVip ){
            System.out.print("Desconto aplicado ");

        }else{

            System.out.print("Sem desconto ");
        }

        // 3. solicitacao do usuario
        System.out.print("Digite usuário ");
        String usuario =scanner.nextLine();

        System.out.print("Digite senha ");
        String senha = scanner.nextLine();

        //verifique condicoes e exiba o resultado

        if ("batata123".equals(usuario) && "admin".equals(senha)){
            System.out.print("Login Realizado");
        }else{
            System.out.print("Usuário ou senha Inválida");
        }
       // 4. solicitacao dados usuario
        System.out.print("Digite a nota final");
        double notaFinal = scanner.nextDouble();

        System.out.print("Digite a frequencia(em %): ");
        int frequencia = scanner.nextInt();

         //verifique condicoes e exiba o resultado
        if (notaFinal>= 6 && frequencia >5){
            System.out.print("Aluno aprovado");
        }else{
            System.out.print("Aluno reprovado");
        }
        // 5. solicitacao dados usuario
        System.out.print("Digite a distancia de casa até o trabalho (em km): ");
        double distancia = scanner.nextDouble();

        System.out.print( "Utiliza transporte público(true/false)");
        boolean usaTranportePublico = scanner.nextBoolean();

        // verificando as condicoes e exibindo resultado

        if (distancia> 2.5 && usaTranportePublico){
            System.out.print("Tem direito ao benefício");
        }else{
            System.out.print("Não tem direito ao benefício");
        }
        scanner.close();



    }
}
