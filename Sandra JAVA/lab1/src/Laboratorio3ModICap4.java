public class Laboratorio3ModICap4 {
    public static void main(String[] args) {
        int ano_atual = 2026;

        for (int ano = 1930; ano <= ano_atual; ano += 4) {

            if (ano == 1942) {
                continue;
            }

            if (ano == 1946) {
                continue;


            }
            System.out.println(ano);
        }
    }
}