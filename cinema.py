import webbrowser
import os
import time

os.system('color F0')
#declare dictionary movie
moviename = {'movie1':'Kubo And The Two Strings','movie2':'Suicide Squad','movie3':'Lights Out','movie4':'Train To Busan','movie5':'One Piece Film:Gold'}
movietime = {'movie1':'2:00 pm','movie2':'4:30 pm','movie3':'7:00 pm','movie4':'9:30 pm','movie5':'12:00 am'}
datetoday = time.strftime("%d/%m/%Y")
cont = 'y'

while cont == 'Y' or cont == 'y':
    os.system('cls')
    print "\n||||||||||||||||||||||||||||||||"
    print "||| WELCOME TO LALANG CINEMA |||"
    print "||||||||||||||||||||||||||||||||"

    raw_input("\nPress ENTER to proceed...")
    nama = raw_input("\nPlease enter your name: ")
    print "\n##############################"
    print "\n#          MAIN MENU         #"
    print "\n#----------------------------#"
    print "\n# 1. List Movie & Buy Ticket #"
    print "\n# 2. Exit                    #"
    print "\n##############################"

    o = int(raw_input("\nPlease select option to continue (1/2) : "))
    if o == 1:
        print "\n---------------------------------------------------------------------------"
        raw_input("\nPress ENTER to continue. The program will open up movie selection list, please wait.")
        print "\n---------------------------------------------------------------------------"

    	#open up webpage
    	webbrowser.get('C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s').open('localhost/cinema/')

    	#open file to read movie name
    	with open('movieCode.txt','r') as f:
    		movcode = f.readlines()
    		
    		movtitle = moviename[movcode[0]]
    		time = movietime[movcode[0]]
    		print "\n\nMovie name: ", movtitle
    		print "\nScreening time : ", time

    	print "\n---------------------------------------------------------------------------"
    	noadult = int(raw_input("\nPlease enter amount of tickets for adult: "))
    	nochildren = int(raw_input("\nPlease enter amount of tickets for children: "))

        print "\n---------------------------------------------------------------------------"
        raw_input("\nPress ENTER to continue. The program will open up seat selection, please wait.")
        print "\n---------------------------------------------------------------------------"

    	#open up webpage to select seat
    	webbrowser.get('C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s').open('localhost/cinema/seat.php')

        #open file to read movie name
        with open('listseat.txt','r') as s:
            seatread = s.readlines()

        listseat = []
        for line in seatread:
            for item in line.split(','):
                listseat.append(item)

        print "\nSeats selected: "
        for x in range(len(listseat)):
            print listseat[x],

        print "\n---------------------------------------------------------------------------"
        raw_input("\n\nPress ENTER to continue, the program will display your receipt and tickets...")
        print "\n---------------------------------------------------------------------------"

        #calculate total price
        totprice = (noadult * 12.00)+ (nochildren * 10.00)
        gst = totprice * 0.06
        realprice = totprice * 1.06

    	targetreceipt = open('receipt.php','w')
    	headerrec = "<?php include './template/headerreceipt.php'; ?>"
    	footerrec = "<center><a onclick='window.print()' class='printBut'><img src='./images/print.png'/></a></center></body></html>"
    	receiptbody = "<div class='receipt'><div class='paper'><h1>Lalang Cinema</h1><dl><dt>Client's Name</dt><dd>"+nama+"</dd><dt>Date of Purchase:</dt><dd>"+datetoday+"</dd><dt>Tickets:</dt><dd></dd><dt>Adult</dt><dd>"+str(noadult)+" x RM12.00</dd><dt>Children</dt><dd>"+str(nochildren)+" x RM10.00</dd></dl><dl class='total'><dt>Total:</dt><dd>RM"+str(totprice)+"</dd><dt>GST (6%):</dt><dd>RM"+str(gst)+"</dd><dt>Grand Total:</dt><dd>RM"+str(realprice)+"</dd></dl><dl><dt>Enjoy Your Movie :)</dt></dl></div></div>"

    	targetreceipt.write(headerrec+receiptbody+footerrec)
    	targetreceipt.close()
    	

    	target = open('tickets.php','w')
    	header = "<?php include './template/headerticket.php'; ?>"
    	target.write(header)
    	for i in range(len(listseat)):
    		target.write("<div class='cardWrap'><div class='card cardLeft'><h1>Lalang <span>Cinema</span></h1><div class='title'><h2>"+movtitle+"</h2><span>movie</span></div><div class='name'><h2>"+nama+"</h2><span>name</span></div><div class='seat'><h2>"+listseat[i]+"</h2><span>seat</span></div><div class='time'><h2>"+time+"</h2><span>time</span></div></div><div class='card cardRight'><div class='eye'></div><div class='number'><h3>"+listseat[i]+"</h3><span>seat</span></div><div class='barcode'></div></div></div>")

    	footer = "<div class='cardWrap'><center><a onclick='window.print()' class='printBut'><img src='./images/print.png'/></a></center></div></body></html>"
    	target.write(footer)
    	target.close()

        #open web browser to display Receipt and Tickets
        webbrowser.get('C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s').open('localhost/cinema/tickets.php')
        print "\n-----------------------------------------"
        print "\nThank You! Enjoy Your movie!"
        print "\n-----------------------------------------\n"
    
    else: 
        break
    
    cont = raw_input("\nDo you want to continue? Enter Y/N:")

else:
    os.system('cls')
    print "\n======================================"
    print "\n== Thank you for using this system. =="
    print "\n======================================"
raw_input('\n\nPress ENTER to exit program...')
