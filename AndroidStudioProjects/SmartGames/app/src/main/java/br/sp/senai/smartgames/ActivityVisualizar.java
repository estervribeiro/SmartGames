package br.sp.senai.smartgames;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.TextView;
import android.widget.Toast;

import br.sp.senai.smartgames.model.Jogo;

public class ActivityVisualizar extends AppCompatActivity {

    private Jogo jogo;

    private TextView titulo;
    private TextView descricao;
    private TextView preco;
    private TextView loja;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_visualizar);

        titulo = findViewById(R.id.titulo);
        descricao = findViewById(R.id.descricao);
        loja = findViewById(R.id.loja);
        preco = findViewById(R.id.preco);

        Intent intentPegarJogos = getIntent();
        jogo = (Jogo) intentPegarJogos.getSerializableExtra("jogo");


        //** VERIFICAR SE O CONTTAO NAO É NULO, POIS SE FOR NULO OCORRE UM ERRO NO MONETO DE PREEENNCHER O TEXTVIEW
        if (jogo != null){

            titulo.setText(jogo.getNome());
            descricao.setText(jogo.getDescricao());
            loja.setText(jogo.getLoja());
            preco.setText(jogo.getPreco());


        }


    }
}
