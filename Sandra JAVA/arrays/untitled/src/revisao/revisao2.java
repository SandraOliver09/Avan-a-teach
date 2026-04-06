package revisao;

public class revisao2 {
    public static void main(String[] args) {
       // 1 - ) Crie variáveis do tipo int para armazenar:

       int  Quantidadedealunos = 32;
       int Quantidadedecomputadores = 13;

       System.out.println(Quantidadedealunos + Quantidadedecomputadores);

        int resultado= Quantidadedealunos + Quantidadedecomputadores;
        System.out.println(resultado);

        // Depois, mostre os valores na tela e exiba a soma dessas duas quantidades.

                //------------------------------------------------ |exerc 2| ----------------------------------------

       // Crie variáveis do tipo double para armazenar:

        double precodoprod = 193.99;
        double valordescont = 15.00;

        double precofinal=  precodoprod - valordescont;
        System.out.println(precofinal);

        //---------  exerc3 ---------

        String jogo= "matrix";
        String empresa= "VAI COM TUDO";

        System.out.println("O jogo: " +jogo +" foi desenvolvido pela empresa:" + empresa);

        // --------- exercico 4 -------

        boolean usulog= true;
        boolean maioridade= false;

        System.out.println("usuario esta logado:" + usulog);
        System.out.println("usuario é maior de idade:"+ maioridade);

        //--------- exerc5 --------------------------

        String nomeprodut= "jaqueta";
        int qtdadeproduto= 500;
        double precoproduto= 180.00;

        double valortotal= qtdadeproduto * precoproduto;

        System.out.println("produto:" + nomeprodut +"," + "quantidade do prouto:" + qtdadeproduto + " o valor total:" + valortotal);




    }
}
