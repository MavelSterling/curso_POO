class Card extends Payment{
    constructor(id,cardName,cardNumber,cardType){
        super(id);
        this.cardName = cardName;
        this.cardNumber = cardNumber;
        this.cardType = cardType;
    }
}