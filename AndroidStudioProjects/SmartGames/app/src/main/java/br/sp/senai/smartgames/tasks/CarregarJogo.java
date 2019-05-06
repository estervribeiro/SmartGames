package br.sp.senai.smartgames.tasks;

import android.app.ProgressDialog;
import android.content.Context;
import android.os.AsyncTask;
import android.util.Log;
import android.widget.ArrayAdapter;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;

import br.sp.senai.smartgames.MainActivity;
import br.sp.senai.smartgames.model.Jogo;

public class CarregarJogo extends AsyncTask {

    private String dados = "";
    private List<Jogo> jogos;
    private Context context;

    private ProgressDialog progressDialog;

    public CarregarJogo(Context context){
        this.context = context;
    }


    @Override
    protected Object doInBackground(Object[] objects) {


        try {
            //criando a url usada para se conectar com a api
            URL url = new URL("http://10.107.144.11:8080/jogos");

            //** ABRINDO A CONEXÃO PARA A URL CITADA
            HttpURLConnection conexao = (HttpURLConnection) url.openConnection();

            //** CRIANDO UM STREAM (FLUXO) PARA OS DADOS QUE ESTÃO CHEGANDO DA API
            InputStream inputStream = conexao.getInputStream();

            //** PRECISAMOS LER O STREM, ENTÃO CRIAMOS UM LEITOR PARA ELE
            InputStreamReader inputStreamReader = new InputStreamReader(inputStream);

            //** ATRAVÉS DE UM BUFFERREADER VAMOS LER O STREAM
            BufferedReader bufferedReader = new BufferedReader(inputStreamReader);

            //**VAMOS ITERAR(REPETIR) O BUFFER PARA EXTRAIR UMA STRING COM O JSON
            String linha ="";

            while(linha != null){

                linha = bufferedReader.readLine();
                dados = dados + linha;

                Log.d("DADOS", dados);

            }


            //transformando o json em array
            JSONArray jsonArray = new JSONArray(dados);
            jogos = new ArrayList<>();
            Jogo jogo;

            //extraindo o jogo do array e armazenando em um objeto
            for(int i=0; i < jsonArray.length(); i++){
                JSONObject jo = (JSONObject) jsonArray.get(i);
                jogo = new Jogo();
                jogo.setCodigo(jo.getInt("codigo"));
                jogo.setNome(jo.getString("nome"));
                jogo.setDescricao(jo.getString("descricao"));
                jogo.setLoja1(jo.getString("loja1"));
                jogo.setLoja2(jo.getString("loja2"));
                jogo.setPreco(jo.getString("preco"));

                jogos.add(jogo);


            }



        } catch (MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } catch (JSONException e) {
            e.printStackTrace();
        }


        return null;
    }


}
