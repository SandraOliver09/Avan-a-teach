public class exemploswitch2 {//inicio class

    public static void main(String[] args) {// inicio main
        String pais = "franca";

        switch (pais) {
            case "Brasil":
            case "portugual":
                System.out.println("Bom Dia");
                break;
            case "méxico":
            case "espanha":
            case "Argentina":
                System.out.println("buenos dias");
                break;
            case "frança":
                System.out.println("bon jour");
                break;
            default:
                System.out.println("Good Morning");

  }
    }//main
}//class
