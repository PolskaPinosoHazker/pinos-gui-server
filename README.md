# pinos-gui-server
Чтобы использовать с Pinos 0, нужно добавить в core.py данный код
```elif command[0] == "start-gui-server":
                try:
                    os.system('gui-server\\PinosZeroGUI.exe')
                except:
                    print('GUI Server not installed!')```
А также добавить релиз в папку gui-server в корне файлов Pinos 0.
