test_cases = gets.chomp.strip.to_i
input = []
test_cases.times do
  input << gets.chomp.strip
end
 
out = []
 
def split_word(s)
  (0..s.length).inject([]){|ai,i|
    (1..s.length - i).inject(ai){|aj,j|
      aj << s[i,j]
    }
  }
end
 
input.each do |str|
  count = 0
  result = split_word(str)
  result.each do |temp|
    a =  temp.count "a"
    b =  temp.count "b"
    c =  temp.count "c"
    if a == b && b == c
      count += 1
    end
  end
out << count
end
 
puts out