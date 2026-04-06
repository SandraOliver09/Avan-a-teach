public class lab1mod1cap4 {
    public static void main(String[] args){
        int numero =337;
        int divisores = 0;

        for(int i =1; i <= numero; i++){
            if (numero % i == 0){
                divisores++;
            }
        }

        if(divisores > 2) {
            System.out.println("Ele não é primo");
        }else{
            System.out.println("ele e numero primo");

        }

    }
}
