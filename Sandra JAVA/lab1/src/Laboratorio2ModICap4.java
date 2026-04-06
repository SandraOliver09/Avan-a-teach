public class Laboratorio2ModICap4 {
public static void main(String[] args){
    String mes = "setembro";

    switch(mes) {
        case "janeiro":
        case "marco":
        case "maio":
        case "julho":
        case "agosto":
        case "outubro":
        case "dezembro":
            System.out.println("meses de  trinta e um dias");
            break;

        case "fevereiro":
            System.out.println("mes tem 28 dias");
            break;
        case"abril":
        case"junho":
        case"setembro":
        case"novembro":
            System.out.println("o mes escolhido tem 30 dias");
            break;

        default:
            System.out.println("ERROOOO!");
        }

    }
}
