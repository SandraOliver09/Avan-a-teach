package src.Biblioteca.helper;

import java.util.concurrent.TimeUnit;

public class Utils {
public static void pausar(int segundos){
    try{
        TimeUnit.SECONDS.sleep(segundos);
    }catch (InterruptedException e){
        System.out.println("erro ao Pausar");
    }

}
}
