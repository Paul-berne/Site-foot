import subprocess
import sys

print(" 0 = Site foot || 1 = portfolio || 2 = Vos rêves || 3 = thermo green || 4 = build four || 5 = sprite bot")
choix = int(input("Quel projet voulez-vous importer/exporter ? "))

choix_modif = int(input("Voulez-vous : 1 = exporter || 2 = importer ? "))

sur_choix = input("Etes_vous sur ? O / N        ")

# Définissez le chemin de base pour les fichiers
chemin_base = "C:\\Users\\paulb\\Desktop\\code\\script\\import_export\\"

# Définissez le nom du fichier en fonction du choix
fichier_bat = ""
if sur_choix in ["O", "o", "0"]:
    if choix == 0:
        fichier_bat = "export_site_foot.bat" if choix_modif == 1 else "import_site_foot.bat"
    elif choix == 1:
        fichier_bat = "export_portfolio.bat" if choix_modif == 1 else "import_portfolio.bat"
    elif choix == 2:
        fichier_bat = "export_vos_reve.bat" if choix_modif == 1 else "import_vos_reve.bat"
    elif choix == 3:
        fichier_bat = "export_thermo_green.bat" if choix_modif == 1 else "import_thermo_green.bat"
    elif choix == 4:
        fichier_bat = "export_build_four.bat" if choix_modif == 1 else "import_build_four.bat"
    elif choix == 5:
        fichier_bat = "export_sprite_bot.bat" if choix_modif == 1 else "import_sprite_bot.bat"

# Construisez le chemin complet du fichier bat
chemin_du_fichier_bat = chemin_base + fichier_bat

# Vérifiez si l'utilisateur est sûr
if sur_choix in ["n", "N"]:
    # Terminez le programme si l'utilisateur n'est pas sûr
    sys.exit()

# Exécutez le fichier bat
subprocess.run([chemin_du_fichier_bat], shell=True)

# Terminez le programme et masquez la console
sys.exit()
