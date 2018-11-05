# www
Η ιστοσελίδα του εργαστηρίου AVLab. Αφορά μόνο το περιεχόμενο που θα καλύπτεται από το url avlab.ee.auth.gr.
Το project του avlabedu.ee.auth.gr θα στεγαστεί σε άλλο αποθετήριο. Θα δημιουργηθεί και 3ο αποθετήριο που θα καλύψει το version control και τη διαθεσιμότητα των assets που θα εισαχθούν από την υπάρχουσα υποδομή, αυτών που θα δημιουργηθούν εκ νέου και αυτών που θα αναπαραχθούν σε scalable γραφικά (τύπου svg)

## Δομή
- [ ] Στατικές Σελίδες
  - [ ] Προσωπικό
  - [ ] Εκπαίδευση
  - [ ] Έρευνα
  - [ ] Αρχική
- [ ] Δυναμικές Σελίδες
  - [ ] Ανακοινώσεις
  - [ ] Δημοσιεύσεις

## Καλυπτόμενες Συσκεύες
Διακρίνονται 4 form factor υπολογιστικών συσκευών, οι τεχνικές προδιαγραφές των οποίων περιγράφονται παρακάτω
  1. DESKTOP
    * 1920px x 1080px
  1. LAPTOP
    * 1366px x 788px
  1. TABLET
    * to be determined
  1. MOBILE
    * to be determined

Η εκλογή των υποστηριζόμενων συσκευών δεν καλύπτει το τρέχον state of the art, που πλέον για τα desktop είναι 2K ή 4K, ενώ το user share για τα laptop το FullHD δεν έχει ακόμα κυριαρχήσει.
Οι τεχνικές προδιαγραφές των κινητών συσκευών θα οριστούν όταν ερευνηθεί το penetration των διάφορων συσκευών. Θα ήταν χρήσιμο να ελεγχθούν τα analytics της τρέχουσας ιστοσελίδας, αν υπάρχουν. Ειδεμή, θα ληφθούν στατιστικά στοιχεία από το StatCounter και το W3Counter.
Κριτήριο επιλογής είναι η μέγιστη κάλυψη των χρηστών, λαμβάνοντας υπόψιν ότι πολλοί φοιτητές που κύρια θα χρησιμοποιούν την ιστοσελίδα δεν έχουν απαραίτητα συσκευές τελευταίας τεχνολογίας.

## Υποστηριζόμενοι Browser
Τα rendering engines για τα οποία θα υπάρχουν διορθώσεις και ειδικές παρεμβάσεις στην περίπτωση που εμφανίζουν διαφορετική απόκριση σε σχέση με την αναμενόμενη των τυποποιημένων HTML5 - CSS3 είναι:
  1. Gecko (Mozilla Firefox)
  1. Blink (Opera, Chrome, Chromium)
  1. Webkit (Safari, παλιότερος Chrome)

Θα αποφευχθεί η χρήση του CSS grid, μια που ενώ θα διευκόλυνε κατά πολύ την ανάπτυξη responsive συμπεριφοράς με χαμηλό υπολογιστικό footprint δεν έχει ακόμα ενταχθεί στο πρότυπο CSS3.

## Stack Εργαλείων
Τα προτεινόμενα εργαλεία για το content curation και το development είναι τα εξής:
  * **Διανυσματικά γραφικά** - Inkscape
  * **Photo & Video Library Managment** - Digikam
  * **Photo & Library Database** - MySQL (σε περίπτωση που η πειραματική ενσωμάτωση της MySQL στο Digikam αποδειχθεί αρκετά σταθερή ώστε να προσφέρει ευκολία στην αποστολή content από οποιαδήποτε συσκευή είναι έμπιστη για να διαχειρίζεται μαζικά το περιεχόμενο)
  * **Photo Post Production** - GIMP
  * **Content Managment** - Wordpress
  * **Web Analytics** - google analytics ή matomo (πρώην Piwik)
  * **Version Control** - Git, Github

## Λειτουργικές Απαιτήσεις
1. Responsive Παρουσίαση του στατικού και δυναμικού περιεχομένου
1. Seamless διασύνδεση με την υποδομή avlabedu.ee.auth.gr
1. Ορθή χρήση των κατάλληλων τύπων γραφικών ανάλογα με τη φύση τους και κατασκευή scalable διανυσματικών γραφικών, κοινώς προσβάσιμων σε όλους τους ενδιαφερόμενους από το μέσω του αποθετηρίου "avlab/assets" στο github.
1. Βελτιστοποίηση για Μηχανές Αναζήτησης
1. Τήρηση αναλυτικών στοιχείων χρήσης
1. Πολυχρηστικό περιβάλλον
1. Αποκλειστική χρήση πρωτοκόλλου https
1. Στρατηγική Αυτοματοποιημένου Backup
1. Πλήρης τεκμηρίωση της υποδομής για τη διευκόλυνση της διαχείρισης στο μέλλον
1. Χρήση ανοιχτού λογισμικού όσο το δυνατόν περισσότερο  
