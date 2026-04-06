package src.Steam;

import java.util.ArrayList;
import java.util.InputMismatchException;
import java.util.Scanner;

public class Main {
    static Scanner teclado =new Scanner(System.in);
    static ArrayList<Jogos> jogos = new ArrayList<>();

    public static void main(String[] args){

        jogos = Arquivos.carregar();

        int opcao = 0;
        while(opcao != 5){

            System.out.println("=======👩🏼‍💻============Steam Tech 👩🏼‍💻========");
            System.out.println("1 - Adicionar um Jogo");
            System.out.println("2 - Listar Jogo");
            System.out.println("3 - Remover um Jogo");
            System.out.println("4 - salvar os Jogos");
            System.out.println("5 - Sair do Sistema");
             try{
                 opcao = teclado.nextInt();
                 teclado.nextLine();

                 switch (opcao){

                     case 1:
                         adicionarJogo();
                         break;

                     case 2:
                         listarJogo();
                         break;

                     case 3:
                         removerJogo();
                         break;

                     case 4:
                         Arquivos.Salvar(jogos);
                         break;

                     case  5:
                         System.out.println("Saindo do Sistema");
                         break;

                     default:
                         System.out.println("Valor Invalido !!!");
                 }
             }catch ( InputMismatchException e){
                 System.out.println("Digite Apenas Numeros");
                 teclado.nextLine();
             }
        }
    }
    public static void adicionarJogo() {
        System.out.println(" Adicionar Jogo \n");
        System.out.println("Digite o nome do Jogo: ");
        String nome = teclado.nextLine();

        System.out.println("Digite o preco do Jogo: ");
        double preco = teclado.nextDouble();
        teclado.nextLine();

        System.out.println(" Digite o genero do Jogo: ");
        String genero = teclado.nextLine();

        jogos.add(new Jogos(nome,preco,genero));

        System.out.println("\n Jogo adicionado com sucesso !!! 😉\n" );
    }

        public static void listarJogo () {
         if(jogos.isEmpty()){
             System.out.println( "Nenhum jogo Cadastrado !!! ");
             return;
         }
         for(int i = 0; i>jogos.size();i++){
             System.out.println(i+ "-");
             jogos.get(i).Mostrar();

         }
        }

        public static void removerJogo () {
        listarJogo();
        System.out.println(" Digite o ID");
        int id = teclado.nextInt();

        jogos.remove(id);

        System.out.println("Jogo Removido!!!");
        }
    }

