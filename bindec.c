int main(){
    int binaire, B, decimal=0, puis2=1;
    printf("saisir binaire: \n");
    
    scanf("%d", &binaire);
    B= binaire;
    do{
        decimal = decimal + (B%10)*puis2;
        puis2=2*puis2;
        B = B / 10;
    }while(B!=0);
    printf("la valeur decimale de %d est : %d", binaire, decimal);
    return 0;
}