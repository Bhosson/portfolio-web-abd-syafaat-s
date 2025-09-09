 class Mobil {
    String merk;
    String warna;

    void info(){
        System.out.println(merk + " berwarna " + warna);
    }
    
}

class Main {

    public static void main(String[] args) {
         Mobil mobil1 = new Mobil();
         mobil1.merk = "Toyota";
         mobil1.warna = "Hitam";
         mobil1.info();
    }
}