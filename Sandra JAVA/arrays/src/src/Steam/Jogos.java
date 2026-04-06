package src.Steam;

public class Jogos {

    String nome;
    double preco;
    String genero;

    public Jogos(String nome, double preco, String genero){
       this.nome=nome;
       this.preco=preco;
       this.genero= genero;

        }
        void Mostrar(){
            System.out.println("O nome: " + this.nome);
            System.out.println("O preco é: " + this.preco);
            System.out.println("O genero é: " + this.genero);

        }
    }

