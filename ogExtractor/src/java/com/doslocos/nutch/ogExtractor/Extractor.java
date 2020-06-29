package com.doslocos.nutch.ogExtractor;


import java.net.MalformedURLException;
import java.net.URL;
import java.util.HashMap;

import org.apache.hadoop.conf.Configuration;
import org.apache.nutch.parse.HTMLMetaTags;
import org.apache.nutch.parse.HtmlParseFilter;
import org.apache.nutch.parse.ParseResult;
import org.apache.nutch.protocol.Content;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
import org.w3c.dom.DocumentFragment;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;



public class Extractor implements HtmlParseFilter{

	public static final Logger LOG = LoggerFactory.getLogger(Extractor.class);
	public static Configuration conf;

	public static String tags;

	@Override
	public ParseResult filter(Content content, ParseResult parseResult, HTMLMetaTags metaTags, DocumentFragment doc) {

		String HTMLBody = new String(content.getContent());

		try {
		
			Document webPage = Jsoup.parse( HTMLBody );

			Elements ogTags = webPage.select("meta[property^=og:]");

			for (Element ogTag :ogTags){

				String temp = ogTag.attr("property") ;

				//if ( tags.contains( temp ) ){

					parseResult.get(content.getUrl()).getData().getParseMeta().add(temp.trim(), ogTag.attr("content").trim() );

				//}
			}


		} catch (Exception e) {
			LOG.error("Error while Extractor in Extractor plugin", e );
		}


		LOG.debug("Extractor part finished for : "+content.getUrl());
		LOG.info("og-tags is : " + tags );

		return parseResult;
	}

	public void setConf(Configuration conf) {
		if( null == Extractor.conf ) {

			Extractor.conf = conf;
		}
		tags = conf.get("doslocos.ogExtractor.tags","og:image, og:url,"
				+ " og:type, og:title, og:site_name, og:description");


	}

	public Configuration getConf() {


		return Extractor.conf;
	}

}
