package Java;


class Payment {
    Integer idPayment;

    public Payment(Integer id) {
        
        this.idPayment = id;

    }

    void printPaymentId() {

        System.out.println("Payment Id → " + this.idPayment);

    }
}