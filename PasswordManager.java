import java.util.HashMap;
import java.util.Scanner;

public class PasswordManager {
    private static HashMap<String, String> passwords = new HashMap<>();
    private static Scanner scanner = new Scanner(System.in);

    public static void main(String[] args) {
        while (true) {
            System.out.println("=== Gestore Password ===");
            System.out.println("1. Aggiungi password");
            System.out.println("2. Visualizza password");
            System.out.println("3. Esci");
            System.out.print("Scegli un'opzione: ");

            String choice = scanner.nextLine();

            switch (choice) {
                case "1":
                    addPassword();
                    break;
                case "2":
                    viewPasswords();
                    break;
                case "3":
                    System.out.println("Chiusura programma...");
                    return;
                default:
                    System.out.println("Opzione non valida!\n");
            }
        }
    }

    private static void addPassword() {
        System.out.print("Inserisci il nome del sito/app: ");
        String site = scanner.nextLine();
        System.out.print("Inserisci la password: ");
        String pwd = scanner.nextLine();

        passwords.put(site, pwd);
        System.out.println("✅ Password aggiunta con successo!\n");
    }

    private static void viewPasswords() {
        if (passwords.isEmpty()) {
            System.out.println("Nessuna password salvata.\n");
            return;
        }
        System.out.println("=== Password salvate ===");
        for (String site : passwords.keySet()) {
            System.out.println("Sito/App: " + site + " → Password: " + passwords.get(site));
        }
        System.out.println();
    }
}