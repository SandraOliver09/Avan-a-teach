package src.Biblioteca.model;

public class Usuario {
    private static  int contador=1;
    private int codigo;
    private String nome;

    public Usuario(String nome){
        this.codigo =contador++;
        this.nome = nome;
    }

    public int getCodigo() {
        return codigo;
    }
    public String getNome(){
        return nome;
    }
    public String toString(){
        return "codigo: "+ this.codigo+
                "\n nome: "+ this.nome;

    }
}

