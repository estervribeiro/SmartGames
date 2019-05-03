package br.sp.senai.smartgames.model;

import java.io.Serializable;

public class Jogo implements Serializable {

    private int codigo;
    private String nome;
    private String descricao;
    private String loja1;
    private String loja2;
    private String preco;

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public String getLoja1() {
        return loja1;
    }

    public void setLoja1(String loja1) {
        this.loja1 = loja1;
    }

    public String getLoja2() {
        return loja2;
    }

    public void setLoja2(String loja2) {
        this.loja2 = loja2;
    }

    public String getPreco() {
        return preco;
    }

    public void setPreco(String preco) {
        this.preco = preco;
    }

    @Override
    public String toString() {
        return "Jogo{" +
                "nome='" + nome + '\'' +
                '}';
    }
}
