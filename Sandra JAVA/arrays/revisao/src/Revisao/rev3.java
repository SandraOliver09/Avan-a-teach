
package Revisao;

import java.util.Scanner;
public class rev3 {
    public static void main(String[] args){
        Scanner scanner =new Scanner(System.in);

        System.out.println("digite o nickname do jogador: ");
        String nicknamejogador = scanner.nextLine();

        System.out.println("Digite a pontuacao atual:" );
        int pontuacao_atual = scanner.nextInt();
        scanner.nextLine();

        System.out.println(" Qual o jogo favorito? ");
        String jogo_favorito = scanner.nextLine();

        //------//-----

        System.out.println("Qual foi valor da entrada? ");
        double valor_entrada = scanner.nextDouble();

        System.out.println(" Qual o valor de saída? ");
        double valor_saida =scanner.nextDouble();

        //--------------//----------------------//

        System.out.print("Qual o nome do fime? ");
        String nome_filme  = scanner.nextLine();
        scanner.nextLine();
        //  ---

        System.out.println("Qual anota do filme? ");
        double nota_filme = scanner.nextDouble();

        //mostrar na tela mensagem
        System.out.println("O filme que eu escolhi foi?" + nome_filme + "e a nota que eu coloquei foi? " + nota_filme );
        scanner.nextLine();


        // Marca do veículo,Ano do veículo (int),valor do veículo (double)
        //Mostre uma frase com todas as informações digitadas.

        System.out.println("Marca do carro? ");

        String marca_veiculo = scanner.nextLine();

        System.out.println(" Qual o ano do veiculo? ");

        int Ano_veiculo = scanner.nextInt();

        System.out.println("Qual o valor do veiculo? ");
        double valor_veiculo = scanner.nextDouble();

        // Exibir frase na tela
        System.out.println(" veiculo da marca? " + marca_veiculo + "ano do veiculo? " + Ano_veiculo + "Valor do veiculo? " +valor_veiculo+". ");
        scanner.nextLine();

        //     nome do evento,quantidade de participante(int) e se o vento é gratuito(true/false = mostre resultado na tela

        System.out.println(" Qual nome do evento? ");
        String Evento = scanner.nextLine();

        System.out.println( "numero de participante? ");
        int Num_participante = scanner.nextInt();

        System.out.println("O evento é gratuito? (Digite true ou false): ");
        boolean Evento_gratuito = scanner.nextBoolean();
        scanner.nextLine();

        // mostrar dados na tela
        System.out.println(" Dados do Evento ");

        System.out.println("nome do evento? " + Evento + "numero de participante? " +"O evento é gratuito? (Digite true ou false): "+ Evento_gratuito );

        scanner.close();







    }
}
