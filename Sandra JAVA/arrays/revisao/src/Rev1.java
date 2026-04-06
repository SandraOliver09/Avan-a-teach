public class Rev1 {
    public static  void main(String[] args){

        //  Exercicio 1 criando 3 variaveis

        String nome_do_aluno = "Susann";
        String cidade = "Santa Catarina";
        String area_interesse = "java";

        //Mostrando a variavel na tela

        System.out.println( nome_do_aluno  );
        System.out.println( cidade );
        System.out.println(area_interesse);


        //  Exercicio 2
        // concatenar String

        System.out.println("Meu nome é: " +nome_do_aluno  +  ", moro em "+cidade + " e minha área_ interesse é " + area_interesse);

        //  Exercicio 3

        int num1 = 10;
        int num2 = 15;
        int resultado = num1 + num2;

        System.out.println(resultado);

        // exercio 4 /Crie constantes

        final String NOME_ESCOLA = "Avanca tech";
        final int ANO_ATUAL = 2026;
        final double SALARIO_MINIMO = 1700.00;

        //MOSTRANDO NA TELA
        System.out.println("Nome da escola:" +  NOME_ESCOLA);
        System.out.println("Mostre o ano atual" +  ANO_ATUAL);
        System.out.println("Mostre o salario minimo" +  SALARIO_MINIMO);



    }
}
