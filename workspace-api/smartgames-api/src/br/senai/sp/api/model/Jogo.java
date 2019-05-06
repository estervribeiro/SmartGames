package br.senai.sp.api.model;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotNull;


@Entity
@Table(name = "tbl_jogos")
public class Jogo {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long codigo;

	@NotNull
	private String nome;
	private String descricao;
	private String loja1;
	private String loja2;
	private String preco;
	
	
	public Long getId() {
		return codigo;
	}
	public void setId(Long id) {
		this.codigo = id;
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
		return "Jogo [codigo=" + codigo + ", nome=" + nome + ", descricao=" + descricao + ", loja1=" + loja1
				+ ", loja2=" + loja2 + ", preco=" + preco + "]";
	}
	

}
