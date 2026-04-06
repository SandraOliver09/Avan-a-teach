package Revisao;

import java.util.Scanner;

public class rev6SwitchCase {
    public static void main(String[] args){
        Scanner scanner= new Scanner(System.in);
        //Exerc 1  numero inteiro

        System.out.print("Digite um numero inteiro para escolher a bebida(1-4):");

        int opcaoBebida=scanner.nextInt();

        //utilizando switch

        switch(opcaoBebida){
            case 1:
                System.out.print("café");
                break;
            case 2:
                System.out.print("chá");
                break;
            case 3:
                System.out.print("suco");
                break;
            case 4:
                System.out.println("Refrigerante");
                break;
            default:
                System.out.println("Número Inválido");


        }
        //Exerc 2

        System.out.println("Digite  um numero para escolher o dias da semana(1-7): ");

        int DiaSemana = scanner.nextInt();

        switch (DiaSemana) {
            case 1:
                System.out.println("Domingo");
                break;
            case 2:
                System.out.println("Segunda");
                break;
            case 3:
                System.out.println("Terça");
                break;
            case 4:
                System.out.println("Quarta");
                break;
            case 5:
                System.out.println("Quinta");
                break;
            case 6:
                System.out.println("sexta");
                break;
            case 7:
                System.out.println("Sábado");
                break;
            default:
                System.out.println("Número não corresponde a  um dia válido");
        }
                // Exerci 3

        System.out.println("Digite um numero para escolher um nivel(1-3");
        int Nivel= scanner.nextInt();

        switch (Nivel) {
            case 1:
                System.out.println("Fácil");
                break;
            case 2:
                System.out.println("médio");
                break;
            case 3:
                System.out.println("Difícil");
            default:
                System.out.println("Valor Inválido");
        }
                        // Exerci 4

        System.out.println("Digite uma opcao para escplher uma forma de pagamento (1-4): ");
        int FormaPagamento=scanner.nextInt();

        switch (FormaPagamento) {
            case 1:
                System.out.println("Dinheiro");
                break;
            case 2:
                System.out.println("cartão Crédito");
                break;
            case 3:
                System.out.println("Cartão Débito");
                break;
            case 4:
                System.out.println("Pix");
            default:
                System.out.println("Opção Iválida");
        }
                             //  Exercicio 5
        scanner.nextLine();
        System.out.println("Digite uma letra (A,B,C, D: ");
        String letra = scanner.nextLine();

        switch (letra){
            case "A":
                System.out.println("Excelente");
                break;

            case"B":
                System.out.println("Bom");
                break;
            case"C":
                System.out.println("Regular");
                break;
            case"D":
                System.out.println(" Ruim");
            default:
                System.out.println("Letra Invalida");

                scanner.close();


        }

    }




}
