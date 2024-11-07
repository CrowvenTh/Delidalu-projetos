/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.controle;

/**
 *
 * @author bryan
 */
public class Estoque {
    private int id_produto;
    private String tipo_estoque;
    private double preco_unidade;
    private int quantidade_estoque;

    public int getId_produto() {
        return id_produto;
    }

    public void setId_produto(int id_produto) {
        this.id_produto = id_produto;
    }

    public String getTipo_estoque() {
        return tipo_estoque;
    }

    public void setTipo_estoque(String tipo_estoque) {
        this.tipo_estoque = tipo_estoque;
    }

    public double getPreco_unidade() {
        return preco_unidade;
    }

    public void setPreco_unidade(double preco_unidade) {
        this.preco_unidade = preco_unidade;
    }

    public int getQuantidade_estoque() {
        return quantidade_estoque;
    }

    public void setQuantidade_estoque(int quantidade_estoque) {
        this.quantidade_estoque = quantidade_estoque;
    }
}
