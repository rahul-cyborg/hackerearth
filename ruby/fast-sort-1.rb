test_cases = gets.chomp.strip.to_i

alphabet = []
str = []

test_cases.times do
  alphabet << gets.chomp.strip.to_s
  str << gets.chomp.strip.to_s
end

out = []

(0...str.length).each do |i|
  temp_alphabet = alphabet[i]
  temp_str = str[i]
  temp_alphabet_hash = {}
  temp_str_hash = {}
  count_hash = {}
  (0...temp_alphabet.length).each do |j|
    temp_alphabet_hash[temp_alphabet[j]] = j
  end
  temp_str.each_char do |char|
    temp_str_hash[char] = temp_alphabet_hash[char]
    if  count_hash[char].nil?
      count_hash[char] = 1 
    else
      count_hash[char] += 1
    end
  end

  temp_str_data = ''
  sorted_hash_by_value = temp_str_hash.sort_by {|_key, value| value}
  sorted_hash_by_value.each do |arr|
    val = arr[0]
    times = count_hash[val]
    temp = val * times
    temp_str_data << temp
  end
  out << temp_str_data
end

puts out