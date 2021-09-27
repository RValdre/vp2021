import random

u_raha = int(input("Insert gambling money value!: "))
lucky_nr = 7

vastus = "y"

while vastus == "y":
    if u_raha < 1:
        print("You are out of money, game will close! ")
        break
    print("\nRolling the dice!")
    dice_1 = random.randint(1,6)
    dice_2 = random.randint(1,6)
    print("You rolled a " + str(dice_1) + " and a " + str(dice_2) + " !")
    dice_value = dice_1 + dice_2
    print("Total value:" + str(dice_value))
    if dice_value == lucky_nr:
        u_raha += 4
        print("Congratulations you rolled a 7 and won 4$!\n Your current money: " + str(u_raha))
        vastus = str(input("Would you like to roll again ? [y/n]"))
    if dice_value == lucky_nr and vastus == "y":
        continue
    if dice_value != lucky_nr:
        u_raha -= 1
        print("Unlucky your roll value wasn't 7, you lost 1$!\n Your current money: " + str(u_raha))
        vastus = str(input("Would you like to roll again ? [y/n]"))
    if vastus != "y":
        print("The game will close!")
        break
        
        
        
        
    