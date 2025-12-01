# Gioco del Tris (Tic-Tac-Toe) in Python

def print_board(board):
    print("\n")
    for row in board:
        print(" | ".join(row))
        print("-" * 9)
    print("\n")

def check_winner(board, player):
    # Controllo righe
    for row in board:
        if all(cell == player for cell in row):
            return True
    # Controllo colonne
    for col in range(3):
        if all(board[row][col] == player for row in range(3)):
            return True
    # Controllo diagonali
    if all(board[i][i] == player for i in range(3)):
        return True
    if all(board[i][2 - i] == player for i in range(3)):
        return True
    return False

def is_full(board):
    return all(cell != " " for row in board for cell in row)

def tic_tac_toe():
    board = [[" " for _ in range(3)] for _ in range(3)]
    players = ["X", "O"]
    turn = 0

    print("Benvenuti al gioco del Tris!")
    print_board(board)

    while True:
        player = players[turn % 2]
        print(f"Tocca a {player}")
        
        try:
            row = int(input("Inserisci la riga (0-2): "))
            col = int(input("Inserisci la colonna (0-2): "))
        except ValueError:
            print("Inserisci solo numeri validi!")
            continue

        if row not in range(3) or col not in range(3):
            print("Posizione non valida, riprova.")
            continue

        if board[row][col] != " ":
            print("Casella già occupata, riprova.")
            continue

        board[row][col] = player
        print_board(board)

        if check_winner(board, player):
            print(f"Complimenti! {player} ha vinto!")
            break

        if is_full(board):
            print("Pareggio! La griglia è piena.")
            break

        turn += 1

# Avvia il gioco
tic_tac_toe()