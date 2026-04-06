package aula09;

public class Exibiraluno {
    public static void main(String[] args){
        alunos[] aluno = new alunos[3];

        aluno[0] =new alunos();
        aluno[0].nome = "Gustavo";
        aluno[0].nota = 8.0;

        aluno[1] =new alunos();
        aluno[1].nome = "Sandra";
        aluno[1].nota = 8.7;

        aluno[2] =new alunos();
        aluno[2].nome = "Susann";
        aluno[2].nota = 9.5;


        System.out.println("aluno:" +aluno[0].nome +" | Nota:" + aluno[0].nota);

        for (int i = 0; i < aluno.length;i++){

            System.out.println("aluno:" +aluno[i].nome +" | Nota:" + aluno[i].nota);

        }


    }
}
