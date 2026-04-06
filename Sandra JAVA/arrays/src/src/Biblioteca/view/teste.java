package src.Biblioteca.view;

import src.Biblioteca.model.Emprestimo;
import src.Biblioteca.model.Livro;
import src.Biblioteca.model.Usuario;

public class teste {
    public static void main(String[] args){
        Livro l1 = new Livro("Contabilidade de Custos", "Eliseu Martins");
        Livro l2=new Livro("Contabilidade Tributária", "Flávio Luiz Vieira");

        Usuario u1= new Usuario("Sandra");
        Usuario u2= new Usuario("Susann");


        Emprestimo e1 = new Emprestimo(l1,u1);

        System.out.println(e1);

    }
}
