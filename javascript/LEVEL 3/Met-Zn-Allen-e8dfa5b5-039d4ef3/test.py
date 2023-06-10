# Client = int(input("Please type in a temperature (F):"))

# ant = (Client - 32)/1.8
# if ant >= 0:
#     print(Client ,' degrees Fahrenheit equals', ant , "degrees Celsius")
# elif ant < 0:
#     print(Client ,' degrees Fahrenheit equals', ant , "degrees Celsius")
#     print("Brr! It's cold in here!")

# PerUur = float(input("Hourly wage: "))
# Uur = float(input("Hours worked: "))
# day = input("Day of the week: ")

# ant = float(PerUur * Uur)

# print("Daily wages: ", ant)

points = int(input("How many points are on your card? "))
if points < 100:
    points = points * 1.1
    print("Your bonus is 10 %")

elif points >= 100:
    points= points * 1.15
    print("Your bonus is 15 %")

print("You now have", points, "points")
